var button = document.createElement('button');
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function setThemeFromCookie() {
    var theme = getCookie("theme");
    if (theme) {
        setTheme(theme);
    } else {
        setTheme('light');
    }
}

function setTheme(themeInput) {
    var theme = document.getElementById('theme');
    theme.setAttribute('href', 'css/' + themeInput + '.css');
    if (themeInput == 'light') {
        button.style.color = "white"
        button.style.backgroundColor = "#383838";
        button.innerHTML = '<i  class="fa fa-moon-o"></i>';
    } else if (themeInput == 'dark') {
        button.style.color = "orange"
        button.style.backgroundColor = "#f8f9fa";
        button.innerHTML = '<i class="fa fa-sun-o"></i>';
    }
    setCookie("theme", themeInput, 365); 
}

function toggleTheme() {
    button.classList.toggle('button-animate');
    var theme = document.getElementById('theme');
    if (theme.getAttribute('href') == 'css/light.css') {
        setTheme('dark');
    } else {
        setTheme('light');
    }
    setTimeout(() => {
        button.classList.toggle('button-animate');
    }, 300);
}

window.addEventListener('DOMContentLoaded', (event) => {
    button.style = "z-index:9999;display: flex; justify-content: center; align-items: center; position: fixed; bottom: 0; right: 0; background-color: #383838; border: none; font-size: 16px; cursor: pointer; border-radius:50%; height: 30px; width: 30px; margin: 20px; border: 0.5px solid light-gray;";
    document.getElementById('navbar').appendChild(button);
    setThemeFromCookie();
});

button.onclick = function() {
    toggleTheme();
}
setThemeFromCookie();