<?php

    /**
     * DS1 - zakladni konfigurace pro domenu
     */

    // ZAKLADNI INFORMACE O DOMENE
    // domena bez http
    define("DS1_DOMAIN_URL", "localhost");
    define("DS1_DOMAIN_IN_PRODUCTION", false);
    define("DS1_DOMAIN_USE_HTTPS", false);
    define("DS1_DOMAIN_USE_FRIENDLY_URL", false);

    // JEN RELATIVE PATH DLE CONTEXTU
    // TODO tohle si nastavte dle vlastni cesty na localhostu = nazev adresare
    if (DS1_CONTEXT == DS1_CONTEXT_VALUE_WEB) {
        define("DS1_DOMAIN_RELATIVE_PATH_ADD", "/sem/web");
    }
    else if (DS1_CONTEXT == DS1_CONTEXT_VALUE_ADMIN) {
        define("DS1_DOMAIN_RELATIVE_PATH_ADD", "/sem/web");
    }

    // PRIPOJENI K DB
    define("DB_SERVER", "localhost");
    define("DB_DATABASE_NAME", "ds1_web_semestralka2");
    define("DB_USER_LOGIN", "newuser");
    define("DB_USER_PASSWORD", "admin");
    define("DB_SHOW_DEBUG_INFO", true);


