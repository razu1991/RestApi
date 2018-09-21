<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception {

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render() {
       return ['errors' => 'Product not belongs to user'];
    }

}
