<?php
namespace Netflow\NfDarkmodeDisable;

class Config {

    static private $instance = null;

    /**
     * @var array|mixed
     */
    protected $conf;

    static public function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __construct()
    {
        $this->conf = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['nf_darkmode_disable'] ?? [];
    }

    public function disableGlobally() {
        return intval($this->conf['disableGlobal'] ?? 0) === 1;
    }

}