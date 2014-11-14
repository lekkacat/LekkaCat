<?php
class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
 
    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     *
     * @return Response
     */
    public function get_response()
    {
		$response = Response::factory();
        $request = Request::factory('errors')->execute();
        $response->body($request->body());
 
        return $response;
    }
}
?>
