<?php

namespace MASNathan\AliExpress;

use MASNathan\AliExpress\Exceptions\ErrorCodeException;
use MASNathan\AliExpress\Request\Request;
use MASNathan\APICaller\Caller;

/**
 * Class AliExpress
 *
 * @package MASNathan\AliExpress
 * @property Client $client
 */
class AliExpress extends Caller
{
    public function request(Request $request)
    {
        $requestArguments = $request->getArguments();

        if (method_exists($request, 'setTrackingId') && !isset($requestArguments['trackingId'])) {
            $request->setTrackingId($this->client->getTrackingId());
        }

        $response = $this->client->get(
            $request->getSection(),
            $request->getArguments()
        );

        $data = $this->handleResponseContent($response, 'json');

        if (isset($data['errorCode']) && $data['errorCode'] != '20010000') {
            throw new ErrorCodeException($data['errorCode']);
        }

        if (isset($data['result'])) {
            return $data['result'];
        }

        return $data;
    }
}
