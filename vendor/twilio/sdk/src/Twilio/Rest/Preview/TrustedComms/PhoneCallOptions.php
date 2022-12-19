<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\TrustedComms;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contacts help@twilio.com.
 */
abstract class PhoneCallOptions {
    /**
     * @param string $reason The business reason for this phone call
     * @param string $applicationSid Refers to the Voice API Initiate Call parameter
     * @param string $callerId Refers to the Voice API Initiate Call parameter
     * @param string $fallbackMethod Refers to the Voice API Initiate Call parameter
     * @param string $fallbackUrl Refers to the Voice API Initiate Call parameter
     * @param string $machineDetection Refers to the Voice API Initiate Call
     *                                 parameter
     * @param int $machineDetectionSilenceTimeout Refers to the Voice API Initiate
     *                                            Call parameter
     * @param int $machineDetectionSpeechEndThreshold Refers to the Voice API
     *                                                Initiate Call parameter
     * @param int $machineDetectionSpeechThreshold Refers to the Voice API Initiate
     *                                             Call parameter
     * @param int $machineDetectionTimeout Refers to the Voice API Initiate Call
     *                                     parameter
     * @param string $method Refers to the Voice API Initiate Call parameter
     * @param bool $record Refers to the Voice API Initiate Call parameter
     * @param string $recordingChannels Refers to the Voice API Initiate Call
     *                                  parameter
     * @param string $recordingStatusCallback Refers to the Voice API Initiate Call
     *                                        parameter
     * @param string $recordingStatusCallbackEvent Refers to the Voice API Initiate
     *                                             Call parameter
     * @param string $recordingStatusCallbackMethod Refers to the Voice API
     *                                              Initiate Call parameter
     * @param string $sendDigits Refers to the Voice API Initiate Call parameter
     * @param string $sipAuthPassword Refers to the Voice API Initiate Call
     *                                parameter
     * @param string $sipAuthUsername Refers to the Voice API Initiate Call
     *                                parameter
     * @param string $statusCallback Refers to the Voice API Initiate Call parameter
     * @param string $statusCallbackEvent Refers to the Voice API Initiate Call
     *                                    parameter
     * @param string $statusCallbackMethod Refers to the Voice API Initiate Call
     *                                     parameter
     * @param int $timeout Refers to the Voice API Initiate Call parameter
     * @param string $trim Refers to the Voice API Initiate Call parameter
     * @param string $url Refers to the Voice API Initiate Call parameter
     * @return CreatePhoneCallOptions Options builder
     */
    public static function create($reason = Values::NONE, $applicationSid = Values::NONE, $callerId = Values::NONE, $fallbackMethod = Values::NONE, $fallbackUrl = Values::NONE, $machineDetection = Values::NONE, $machineDetectionSilenceTimeout = Values::NONE, $machineDetectionSpeechEndThreshold = Values::NONE, $machineDetectionSpeechThreshold = Values::NONE, $machineDetectionTimeout = Values::NONE, $method = Values::NONE, $record = Values::NONE, $recordingChannels = Values::NONE, $recordingStatusCallback = Values::NONE, $recordingStatusCallbackEvent = Values::NONE, $recordingStatusCallbackMethod = Values::NONE, $sendDigits = Values::NONE, $sipAuthPassword = Values::NONE, $sipAuthUsername = Values::NONE, $statusCallback = Values::NONE, $statusCallbackEvent = Values::NONE, $statusCallbackMethod = Values::NONE, $timeout = Values::NONE, $trim = Values::NONE, $url = Values::NONE) {
        return new CreatePhoneCallOptions($reason, $applicationSid, $callerId, $fallbackMethod, $fallbackUrl, $machineDetection, $machineDetectionSilenceTimeout, $machineDetectionSpeechEndThreshold, $machineDetectionSpeechThreshold, $machineDetectionTimeout, $method, $record, $recordingChannels, $recordingStatusCallback, $recordingStatusCallbackEvent, $recordingStatusCallbackMethod, $sendDigits, $sipAuthPassword, $sipAuthUsername, $statusCallback, $statusCallbackEvent, $statusCallbackMethod, $timeout, $trim, $url);
    }
}

class CreatePhoneCallOptions extends Options {
    /**
     * @param string $reason The business reason for this phone call
     * @param string $applicationSid Refers to the Voice API Initiate Call parameter
     * @param string $callerId Refers to the Voice API Initiate Call parameter
     * @param string $fallbackMethod Refers to the Voice API Initiate Call parameter
     * @param string $fallbackUrl Refers to the Voice API Initiate Call parameter
     * @param string $machineDetection Refers to the Voice API Initiate Call
     *                                 parameter
     * @param int $machineDetectionSilenceTimeout Refers to the Voice API Initiate
     *                                            Call parameter
     * @param int $machineDetectionSpeechEndThreshold Refers to the Voice API
     *                                                Initiate Call parameter
     * @param int $machineDetectionSpeechThreshold Refers to the Voice API Initiate
     *                                             Call parameter
     * @param int $machineDetectionTimeout Refers to the Voice API Initiate Call
     *                                     parameter
     * @param string $method Refers to the Voice API Initiate Call parameter
     * @param bool $record Refers to the Voice API Initiate Call parameter
     * @param string $recordingChannels Refers to the Voice API Initiate Call
     *                                  parameter
     * @param string $recordingStatusCallback Refers to the Voice API Initiate Call
     *                                        parameter
     * @param string $recordingStatusCallbackEvent Refers to the Voice API Initiate
     *                                             Call parameter
     * @param string $recordingStatusCallbackMethod Refers to the Voice API
     *                                              Initiate Call parameter
     * @param string $sendDigits Refers to the Voice API Initiate Call parameter
     * @param string $sipAuthPassword Refers to the Voice API Initiate Call
     *                                parameter
     * @param string $sipAuthUsername Refers to the Voice API Initiate Call
     *                                parameter
     * @param string $statusCallback Refers to the Voice API Initiate Call parameter
     * @param string $statusCallbackEvent Refers to the Voice API Initiate Call
     *                                    parameter
     * @param string $statusCallbackMethod Refers to the Voice API Initiate Call
     *                                     parameter
     * @param int $timeout Refers to the Voice API Initiate Call parameter
     * @param string $trim Refers to the Voice API Initiate Call parameter
     * @param string $url Refers to the Voice API Initiate Call parameter
     */
    public function __construct($reason = Values::NONE, $applicationSid = Values::NONE, $callerId = Values::NONE, $fallbackMethod = Values::NONE, $fallbackUrl = Values::NONE, $machineDetection = Values::NONE, $machineDetectionSilenceTimeout = Values::NONE, $machineDetectionSpeechEndThreshold = Values::NONE, $machineDetectionSpeechThreshold = Values::NONE, $machineDetectionTimeout = Values::NONE, $method = Values::NONE, $record = Values::NONE, $recordingChannels = Values::NONE, $recordingStatusCallback = Values::NONE, $recordingStatusCallbackEvent = Values::NONE, $recordingStatusCallbackMethod = Values::NONE, $sendDigits = Values::NONE, $sipAuthPassword = Values::NONE, $sipAuthUsername = Values::NONE, $statusCallback = Values::NONE, $statusCallbackEvent = Values::NONE, $statusCallbackMethod = Values::NONE, $timeout = Values::NONE, $trim = Values::NONE, $url = Values::NONE) {
        $this->options['reason'] = $reason;
        $this->options['applicationSid'] = $applicationSid;
        $this->options['callerId'] = $callerId;
        $this->options['fallbackMethod'] = $fallbackMethod;
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['machineDetection'] = $machineDetection;
        $this->options['machineDetectionSilenceTimeout'] = $machineDetectionSilenceTimeout;
        $this->options['machineDetectionSpeechEndThreshold'] = $machineDetectionSpeechEndThreshold;
        $this->options['machineDetectionSpeechThreshold'] = $machineDetectionSpeechThreshold;
        $this->options['machineDetectionTimeout'] = $machineDetectionTimeout;
        $this->options['method'] = $method;
        $this->options['record'] = $record;
        $this->options['recordingChannels'] = $recordingChannels;
        $this->options['recordingStatusCallback'] = $recordingStatusCallback;
        $this->options['recordingStatusCallbackEvent'] = $recordingStatusCallbackEvent;
        $this->options['recordingStatusCallbackMethod'] = $recordingStatusCallbackMethod;
        $this->options['sendDigits'] = $sendDigits;
        $this->options['sipAuthPassword'] = $sipAuthPassword;
        $this->options['sipAuthUsername'] = $sipAuthUsername;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackEvent'] = $statusCallbackEvent;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['timeout'] = $timeout;
        $this->options['trim'] = $trim;
        $this->options['url'] = $url;
    }

    /**
     * The business reason for this phone call that will appear in the terminating device's screen. Max 50 characters.
     *
     * @param string $reason The business reason for this phone call
     * @return $this Fluent Builder
     */
    public function setReason($reason) {
        $this->options['reason'] = $reason;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $applicationSid Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setApplicationSid($applicationSid) {
        $this->options['applicationSid'] = $applicationSid;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $callerId Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setCallerId($callerId) {
        $this->options['callerId'] = $callerId;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $fallbackMethod Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setFallbackMethod($fallbackMethod) {
        $this->options['fallbackMethod'] = $fallbackMethod;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $fallbackUrl Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setFallbackUrl($fallbackUrl) {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $machineDetection Refers to the Voice API Initiate Call
     *                                 parameter
     * @return $this Fluent Builder
     */
    public function setMachineDetection($machineDetection) {
        $this->options['machineDetection'] = $machineDetection;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param int $machineDetectionSilenceTimeout Refers to the Voice API Initiate
     *                                            Call parameter
     * @return $this Fluent Builder
     */
    public function setMachineDetectionSilenceTimeout($machineDetectionSilenceTimeout) {
        $this->options['machineDetectionSilenceTimeout'] = $machineDetectionSilenceTimeout;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param int $machineDetectionSpeechEndThreshold Refers to the Voice API
     *                                                Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setMachineDetectionSpeechEndThreshold($machineDetectionSpeechEndThreshold) {
        $this->options['machineDetectionSpeechEndThreshold'] = $machineDetectionSpeechEndThreshold;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param int $machineDetectionSpeechThreshold Refers to the Voice API Initiate
     *                                             Call parameter
     * @return $this Fluent Builder
     */
    public function setMachineDetectionSpeechThreshold($machineDetectionSpeechThreshold) {
        $this->options['machineDetectionSpeechThreshold'] = $machineDetectionSpeechThreshold;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param int $machineDetectionTimeout Refers to the Voice API Initiate Call
     *                                     parameter
     * @return $this Fluent Builder
     */
    public function setMachineDetectionTimeout($machineDetectionTimeout) {
        $this->options['machineDetectionTimeout'] = $machineDetectionTimeout;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $method Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setMethod($method) {
        $this->options['method'] = $method;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param bool $record Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setRecord($record) {
        $this->options['record'] = $record;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $recordingChannels Refers to the Voice API Initiate Call
     *                                  parameter
     * @return $this Fluent Builder
     */
    public function setRecordingChannels($recordingChannels) {
        $this->options['recordingChannels'] = $recordingChannels;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $recordingStatusCallback Refers to the Voice API Initiate Call
     *                                        parameter
     * @return $this Fluent Builder
     */
    public function setRecordingStatusCallback($recordingStatusCallback) {
        $this->options['recordingStatusCallback'] = $recordingStatusCallback;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $recordingStatusCallbackEvent Refers to the Voice API Initiate
     *                                             Call parameter
     * @return $this Fluent Builder
     */
    public function setRecordingStatusCallbackEvent($recordingStatusCallbackEvent) {
        $this->options['recordingStatusCallbackEvent'] = $recordingStatusCallbackEvent;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $recordingStatusCallbackMethod Refers to the Voice API
     *                                              Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setRecordingStatusCallbackMethod($recordingStatusCallbackMethod) {
        $this->options['recordingStatusCallbackMethod'] = $recordingStatusCallbackMethod;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $sendDigits Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setSendDigits($sendDigits) {
        $this->options['sendDigits'] = $sendDigits;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $sipAuthPassword Refers to the Voice API Initiate Call
     *                                parameter
     * @return $this Fluent Builder
     */
    public function setSipAuthPassword($sipAuthPassword) {
        $this->options['sipAuthPassword'] = $sipAuthPassword;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $sipAuthUsername Refers to the Voice API Initiate Call
     *                                parameter
     * @return $this Fluent Builder
     */
    public function setSipAuthUsername($sipAuthUsername) {
        $this->options['sipAuthUsername'] = $sipAuthUsername;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $statusCallback Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $statusCallbackEvent Refers to the Voice API Initiate Call
     *                                    parameter
     * @return $this Fluent Builder
     */
    public function setStatusCallbackEvent($statusCallbackEvent) {
        $this->options['statusCallbackEvent'] = $statusCallbackEvent;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $statusCallbackMethod Refers to the Voice API Initiate Call
     *                                     parameter
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param int $timeout Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setTimeout($timeout) {
        $this->options['timeout'] = $timeout;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $trim Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setTrim($trim) {
        $this->options['trim'] = $trim;
        return $this;
    }

    /**
     * Refers to the parameter with the same name when [initiating a call via Voice API](https://www.twilio.com/docs/voice/api/call#create-a-call-resource)
     *
     * @param string $url Refers to the Voice API Initiate Call parameter
     * @return $this Fluent Builder
     */
    public function setUrl($url) {
        $this->options['url'] = $url;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.TrustedComms.CreatePhoneCallOptions ' . \implode(' ', $options) . ']';
    }
}
