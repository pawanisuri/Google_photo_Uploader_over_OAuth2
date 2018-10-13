<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/source/v1/source_context.proto

namespace Google\Cloud\DevTools\Source\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ExtendedSourceContext is a SourceContext combined with additional
 * details describing the context.
 *
 * Generated from protobuf message <code>google.devtools.source.v1.ExtendedSourceContext</code>
 */
class ExtendedSourceContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Any source context.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.SourceContext context = 1;</code>
     */
    private $context = null;
    /**
     * Labels with user defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Source\V1\SourceContext::initOnce();
        parent::__construct();
    }

    /**
     * Any source context.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.SourceContext context = 1;</code>
     * @return \Google\Cloud\DevTools\Source\V1\SourceContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Any source context.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.SourceContext context = 1;</code>
     * @param \Google\Cloud\DevTools\Source\V1\SourceContext $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DevTools\Source\V1\SourceContext::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Labels with user defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels with user defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

