<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contacts help@twilio.com.
 */
class StyleSheetContext extends InstanceContext {
    /**
     * Initialize the StyleSheetContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The SID of the Assistant with the StyleSheet
     *                             resource to fetch
     * @return \Twilio\Rest\Autopilot\V1\Assistant\StyleSheetContext
     */
    public function __construct(Version $version, $assistantSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/StyleSheet';
    }

    /**
     * Fetch a StyleSheetInstance
     *
     * @return StyleSheetInstance Fetched StyleSheetInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new StyleSheetInstance($this->version, $payload, $this->solution['assistantSid']);
    }

    /**
     * Update the StyleSheetInstance
     *
     * @param array|Options $options Optional Arguments
     * @return StyleSheetInstance Updated StyleSheetInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array('StyleSheet' => Serialize::jsonObject($options['styleSheet']), ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new StyleSheetInstance($this->version, $payload, $this->solution['assistantSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Autopilot.V1.StyleSheetContext ' . \implode(' ', $context) . ']';
    }
}