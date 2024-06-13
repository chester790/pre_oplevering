<?php

use PHPUnit\Framework\TestCase;
use Goutte\Client;

class GoutteTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        $this->client = new Client();
    }

    public function testExamplePageTitle()
    {
        $crawler = $this->client->request('GET', 'http://localhost/pre/index.php');

        $title = $crawler->filter('title')->text();
        $expectedTitle = "Pré Print & Mail";

        $this->assertEquals($expectedTitle, $title, "Page title does not match expected title");
    }

    public function testLinkWithId()
    {
        // Maak een HTTP GET-verzoek naar de pagina met de link
        $crawler = $this->client->request('GET', 'http://localhost/pre/index.php');

        // Zoek de link op basis van het HTML ID-attribuut
        $link = $crawler->filter('#userDropdown')->link();

        // Klik op de link
        // $crawler = $this->client->click($link);

        $logoutText = $crawler->filterXPath('//*[contains(text(), "Login")]');

        // Controleer of het element met de logout tekst bestaat
        $this->assertGreaterThan(0, $logoutText->count(), 'De logout tekst is niet gevonden op de pagina');

    }

    public function testFormSubmit()
    {
        // Maak een HTTP GET-verzoek naar de pagina met het formulier
        $crawler = $this->client->request('GET', 'http://localhost/pre/login.html');

        // Selecteer het formulier op basis van de naam of ID
        $form = $crawler->selectButton('Login')->form();

        // Vul het formulier in
        $form['email'] = 'Test@gmail.com';
        $form['password'] = 'Ditiseentest';

        // Verstuur het formulier
        $crawler = $this->client->submit($form);

        // Controleer of de pagina na het versturen van het formulier de verwachte inhoud bevat
        $this->assertStringContainsString('Diensten', $crawler->text());
    }

    public function testFormSubmitWrong()
    {
        // Maak een HTTP GET-verzoek naar de pagina met het formulier
        $crawler = $this->client->request('GET', 'http://localhost/pre/login.html');

        // Selecteer het formulier op basis van de naam of ID
        $form = $crawler->selectButton('Login')->form();

        // Vul het formulier in
        $form['email'] = 'Test@gmail.com';
        $form['password'] = 'Ditisgeentest';

        // Verstuur het formulier
        $crawler = $this->client->submit($form);

        $this->assertStringContainsString('Invalid password', $crawler->text());
    }

}