<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\ListResource;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contacts help@twilio.com.
 */
class DefaultsList extends ListResource {
    /**
     * Construct the DefaultsList
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The SID of the Assistant that is the parent of
     *                             the resource
     * @return \Twilio\Rest\Autopilot\V1\Assistant\DefaultsList
     */
    public function __construct(Version $version, $assistantSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, );
    }

    /**
     * Constructs a DefaultsContext
     *
     * @return \Twilio\Rest\Autopilot\V1\Assistant\DefaultsContext
     */
    public function getContext() {
        return new DefaultsContext($this->version, $this->solution['assistantSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Autopilot.V1.DefaultsList]';
    }
}
