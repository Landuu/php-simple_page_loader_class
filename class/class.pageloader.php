<?php
    //Config
    class PageList {
        protected static $PAGE_ERROR = '404';
        protected static $PAGE_HOMEPAGE = 'home';

        protected static $PAGES = [
            'o-nas',
            'oferta',
            'kontakt'
        ];
    }

    class PageLoader extends PageList {

        private static function includePage(string $page_name) {
            $path = "./includes/$page_name.php";
            include($path);
        }


        public static function load() {

            //Jeżeli nie ma GET lub GET==0, załaduj home
            if( !isset($_GET['page']) || $_GET['page'] == "") {
                self::includePage(self::$PAGE_HOMEPAGE);
                return;
            }


            $page_name = $_GET['page'];

            if( in_array($page_name, self::$PAGES) ) {
                self::includePage($page_name);
            } else {
                self::includePage(self::$PAGE_ERROR);
            }

        }
    }

?>