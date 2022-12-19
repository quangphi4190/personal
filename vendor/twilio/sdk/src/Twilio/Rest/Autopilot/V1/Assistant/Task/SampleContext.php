<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant\Task;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contacts help@twilio.com.
 */
class SampleContext extends InstanceContext {
    /**
     * Initialize the SampleContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The SID of the Assistant that is the parent of
     *                             the Task associated with the resource to fetch
     * @param string $taskSid The SID of the Task associated with the Sample
     *                        resource to create
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Autopilot\V1\Assistant\Task\SampleContext
     */
    public function __construct(Version $version, $assistantSid, $taskSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, 'taskSid' => $taskSid, 'sid' => $sid, );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Tasks/' . \rawurlencode($taskSid) . '/Samples/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a SampleInstance
     *
     * @return SampleInstance Fetched SampleInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new SampleInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['taskSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the SampleInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SampleInstance Updated SampleInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'Language' => $options['language'],
            'TaggedText' => $options['taggedText'],
            'SourceChannel' => $options['sourceChannel'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new SampleInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['taskSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the SampleInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
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
        return '[Twilio.Autopilot.V1.SampleContext ' . \implode(' ', $context) . ']';
    }
}
