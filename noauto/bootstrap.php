<?php
ini_set('error_reporting', E_ALL);
define('MOCK_ALL_REQUESTS', true);

/* mock COREPOS API classes for testing */

if (!class_exists('Plugin', false)) {
    class Plugin 
    {
        public function pluginUrl()
        {
            return '';
        }
    }
}

if (!class_exists('AjaxCallback', false)) {
    class AjaxCallback
    {
        public static function run(){}
    }
}

if (!class_exists('Notifier', false)) {
    class Notifier {}
}

if (!class_exists('LibraryClass', false)) {
    class LibraryClass {}
}

if (!class_exists('UdpComm', false)) {
    class UdpComm
    {
        public static function udpSend($msg){}
    }
}

if (!class_exists('AutoLoader', false)) {
    class AutoLoader 
    {
        public static function dispatch(){}
    }
}

if (!class_exists('PreParser', false)) {
    class PreParser {}
}

if (!class_exists('FooterBox', false)) {
    class FooterBox {}
}

if (!class_exists('ReceiptMessage', false)) {
    class ReceiptMessage {}
}

if (!class_exists('SpecialUPC', false)) {
    class SpecialUPC {}
}

if (!class_exists('BasicCorePage', false)) {

    class BasicCorePage 
    {
        protected $page_url = '';
        protected $body_class = '';
        public function __construct(){}
        public function change_page($url){}
        public function addOnloadCommand($str){}
        public function input_header($action='')
        {
            return '';
        }
        public function hide_input($hide){}
        public function head_content(){}
        protected function scale_box()
        {
            return '';
        }
        protected function scanner_scale_polling()
        {
            return '';
        }
    }
}

if (!class_exists('InputCorePage', false)) {
    class InputCorePage extends BasicCorePage {}
}

if (!class_exists('NoInputCorePage', false)) {
    class NoInputCorePage extends BasicCorePage {}
}

if (!class_exists('Parser', false)) {
    class Parser
    {
        public function default_json()
        {
            return array(
                'main_frame' => false,
            );
        }
    }
}

if (!class_exists('DisplayLib', false)) {
    class DisplayLib
    {
        public static function printfooter()
        {
            return '';
        }

        public static function boxMsg($msg, $header, $noBeep, $buttons=array())
        {
            return $msg . $header;
        }

        public static function xboxMsg($msg, $buttons=array())
        {
            return $msg;
        }

        public static function standardClearButton()
        {
            return array();
        }
        
        public static function lastpage()
        {
            return '';
        }
    }
}

if (!class_exists('QuickMenuLauncher', false)) {
    class QuickMenuLauncher
    {
        public function parse($str)
        {
            return array();
        }
    }
}

if (!class_exists('MiscLib', false)) {
    class MiscLib
    {
        public static function baseURL()
        {
            return '';
        }

        public static function win32()
        {
            return false;
        }

        static public function pingport($host, $dbms)
        {
            return 1;
        }
    }
}

if (!class_exists('TransRecord', false)) {
    class TransRecord
    {
        public static function addComment($c){}
        public static function addFsTaxExempt(){}
        public static function addRecord($arr)
        {
        }
        public static function addFlaggedTender($desc, $code, $amt, $id, $flag){}
        public static function debugLog($msg){}
    }
}

if (!class_exists('ReceiptLib', false)) {

    class ReceiptLib
    {
        public static function bold()
        {
            return '';
        }

        public static function unbold()
        {
            return '';
        }

        public static function centerString($str)
        {
            return $str;
        }

        public static function receiptNumber()
        {
            return '1-1-1';
        }
    }
}

if (!class_exists('SQLManager', false)) {
    class SQLManager
    {
        private static $mock = array();
        public $connections = array();

        public function __construct($host, $dbms, $db, $user, $passwd)
        {
        }

        public function tableExists($table)
        {
            return true;
        }

        public function insertID()
        {
            return 1;
        }

        public function curdate()
        {
            return 'curdate()';
        }

        public function now()
        {
            return 'now()';
        }

        public static function addResult($row)
        {
            self::$mock[] = $row;
        }

        public static function clear()
        {
            self::$mock = array();
        }

        public function sep()
        {
            return '.';
        }

        public function query($str)
        {
            return true;
        }

        public function numRows($res)
        {
            return count(self::$mock);
        }

        public function fetchRow($res)
        {
            $row = array_shift(self::$mock);
            return $row === null ? false : $row;
        }

        public function getRow($prep, $args=array())
        {
            return $this->fetchRow(null);
        }

        public function prepare($query)
        {
            return $query;
        }

        public function execute($prep, $args)
        {
            return true;
        }
    }
}

if (!class_exists('Database', false)) {
    class Database
    {
        public static function setglobalvalue($k, $v)
        {
        }

        public static function getsubtotals(){}

        public static function pDataConnect()
        {
            return new SQLManager('', '', '', '', '');
        }

        public static function tDataConnect()
        {
            return new SQLManager('', '', '', '', '');
        }

        public static function mDataConnect()
        {
            return new SQLManager('', '', '', '', '');
        }
    }
}

if (!class_exists('CoreLocal', false)) {
    class CoreLocal
    {
        private static $data = array();
        public static function get($k)
        {
            return isset(self::$data[$k]) ? self::$data[$k] : '';
        }

        public static function set($k, $v)
        {
            self::$data[$k] = $v;
        }
    }
}

if (!class_exists('LookupByCard', false)) {
    class MemberLookup
    {
        protected function listToArray($dbc, $result)
        {
            return array();
        }
    }
}

if (!class_exists('TenderModule', false)) {
    class TenderModule
    {
        protected $amount = 0;
        protected $tender_code = 'TT';
        protected $name_string = 'Tender';

        public function defaultTotal()
        {
            return 0;
        }

        public function setTC($tc)
        {
            $this->tender_code = $tc;
        }
    }
}
if (!class_exists('Authenticate', false)) {
    class Authenticate
    {
        public static function checkPassword($p)
        {
            return true;
        }
        public static function getPermission($emp)
        {
            return 0;
        }

        public static function checkPermission($emp, $level)
        {
            return true;
        }
    }
}
if (!class_exists('PrehLib', false)) {
    class PrehLib
    {
        public static function fsEligible(){}
        public static function peekItem($bool){}
    }
}
if (!class_exists('Void', false)) {
    class Void
    {
        public function voidid($id, $json)
        {
            return array();
        }
    }
}
if (!class_exists('ESCPOSPrintHandler', false)) {
    class ESCPOSPrintHandler
    {
        public function writeLine($msg){}
    }
}

if (!class_exists('SpecialDept', false)) {
    class SpecialDept
    {
    }
}

if (!class_exists('CustomerReceiptMessage', false)) {
    class CustomerReceiptMessage
    {
    }
}

if (!class_exists('COREPOS\\pos\\lib\\MemberLib')) {
    include(__DIR__ . '/mocks/MemberLib.php');
}

if (!class_exists('COREPOS\\pos\\lib\\DeptLib')) {
    include(__DIR__ . '/mocks/DeptLib.php');
}

if (!class_exists('COREPOS\\pos\\lib\\FormLib')) {
    include(__DIR__ . '/mocks/FormLib.php');
}

if (!class_exists('COREPOS\\pos\\lib\\SQLManager')) {
    include(__DIR__ . '/mocks/SQLManager.php');
}

if (!class_exists('COREPOS\\pos\\lib\\models\BasicModel')) {
    include(__DIR__ . '/mocks/BasicModel.php');
}

include(__DIR__ . '/self.php');

