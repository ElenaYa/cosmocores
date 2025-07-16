document.addEventListener('DOMContentLoaded', function() {
    const COOKIES_ACCEPTED_KEY = 'cookies_accepted';
    const COOKIES_PREFERENCES_KEY = 'cookies_preferences';

    function createCookiesBanner() {
        const banner = document.createElement('div');
        banner.className = 'cookies-banner';
        banner.innerHTML = `
            <div class="cookies-banner-content">
                <div class="cookies-banner-text">
                    Utilizamos cookies para mejorar tu experiencia en nuestro sitio web. Al continuar navegando, aceptas nuestra 
                    <a href="/cookies.html">Política de Cookies</a> y 
                    <a href="/privacy.html">Política de Privacidad</a>.
                </div>
                <div class="cookies-banner-buttons">
                    <button class="cookies-btn cookies-btn-accept" onclick="acceptAllCookies()">Aceptar Todo</button>
                    <button class="cookies-btn cookies-btn-manage" onclick="manageCookies()">Declinar</button>
                </div>
            </div>
        `;
        document.body.appendChild(banner);
        
        setTimeout(() => {
            banner.classList.add('show');
        }, 500);
    }

    window.acceptAllCookies = function() {
        const preferences = {
            necessary: true,
            analytics: true,
            marketing: true,
            lastUpdated: new Date().toISOString()
        };
        
        localStorage.setItem(COOKIES_ACCEPTED_KEY, 'true');
        localStorage.setItem(COOKIES_PREFERENCES_KEY, JSON.stringify(preferences));
        
        hideBanner();
    };

    window.manageCookies = function() {
        window.location.href = '/cookies.html';
    };

    function hideBanner() {
        const banner = document.querySelector('.cookies-banner');
        if (banner) {
            banner.classList.remove('show');
            setTimeout(() => {
                banner.remove();
            }, 500);
        }
    }

    const cookiesAccepted = localStorage.getItem(COOKIES_ACCEPTED_KEY);
    if (!cookiesAccepted) {
        createCookiesBanner();
    }
});
