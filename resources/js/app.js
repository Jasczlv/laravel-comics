import "./bootstrap";

//importo scss usando l'alias che ho create in precedenza in vite.config.js
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

//importo la tutti i contenuti della cartella img
import.meta.glob(["../img/**"]);
