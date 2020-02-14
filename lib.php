<?php
abstract class external_description {
    /** @var string Description of element */
    public $desc;

    /** @var bool Element value required, null not allowed */
    public $required;

    /** @var mixed Default value */
    public $default;

    /**
     * Contructor
     *
     * @param string $desc
     * @param bool $required
     * @param mixed $default
     * @since Moodle 2.0
     */
    public function __construct($desc, $required, $default) {
        $this->desc = $desc;
        $this->required = $required;
        $this->default = $default;
    }
}

class external_value extends external_description {

    /** @var mixed Value type PARAM_XX */
    public $type;

    /** @var bool Allow null values */
    public $allownull;

    /**
     * Constructor
     *
     * @param mixed $type
     * @param string $desc
     * @param bool $required
     * @param mixed $default
     * @param bool $allownull
     * @since Moodle 2.0
     */
    public function __construct($type, $desc='', $required=VALUE_REQUIRED,
            $default=null, $allownull=NULL_ALLOWED) {
        parent::__construct($desc, $required, $default);
        $this->type      = $type;
        $this->allownull = $allownull;
    }
}
?>