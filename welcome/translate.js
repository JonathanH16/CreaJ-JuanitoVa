
//Codigo para traductor Web
document.addEventListener("DOMContentLoaded", function() {
    const languageSelector = document.getElementById("languageSelector");
    const textToTranslate = document.getElementById("textToTranslate");

    languageSelector.addEventListener("change", function() {
        const selectedLanguage = languageSelector.value;
        translateText(selectedLanguage);
    });

    function translateText(language) {
        switch (language) {
            case "es":
                textToTranslate.textContent = "Bienvenido a Juanito Va";
                break;
            case "en":
                textToTranslate.textContent = "Welcome To Juanito Va";
                break;
            case "fra":
                textToTranslate.textContent = "Bienvenue à Juanito Va";
                break;
            default:
                textToTranslate.textContent = "Translation not available.";
        }
    }
});