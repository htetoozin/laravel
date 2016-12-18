<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Exceptions\AlreadySyncedException;
use App\Exceptions\ConnectionNotAcceptedException;
use App\Exceptions\CredentialsDoNotMatchException;
use App\Exceptions\EmailAlreadyInSystemException;
use App\Exceptions\EmailNotProvidedException;
use App\Exceptions\NoActiveAccountException;
use App\Exceptions\TransactionFailedException;
use App\Exceptions\UnauthorizedException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {

        switch($e){

            case ($e instanceof AlreadySyncedException):

                return $this->renderException($e);
                break;

            case ($e instanceof ConnectionNotAcceptedException):

                return $this->renderException($e);
                break;

            case ($e instanceof CredentialsDoNotMatchException):

                return $this->renderException($e);
                break;

            case ($e instanceof EmailAlreadyInSystemException):

                return $this->renderException($e);
                break;

            case ($e instanceof EmailNotProvidedException):

                return $this->renderException($e);
                break;

            case ($e instanceof ModelNotFoundException):

                return $this->renderException($e);
                break;
            case ($e instanceof NoActiveAccountException):

                return $this->renderException($e);
                break;

            case ($e instanceof NotFoundHttpException):

                return $this->renderException($e);
                break;

            case ($e instanceof TransactionFailedException):

                return $this->renderException($e);
                break;

            case ($e instanceof UnauthorizedException):

                return $this->renderException($e);
                break;

            default:

                return parent::render($request, $e);

        }
    }

    protected function renderException($e)
    {

        switch ($e){

            case ($e instanceof AlreadySyncedException):

                return response()->view('errors.already-synced');
                break;

            case ($e instanceof ConnectionNotAcceptedException):

                return response()->view('errors.connection-not-accepted');
                break;

            case ($e instanceof CredentialsDoNotMatchException):

                return response()->view('errors.credentials-do-not-match');
                break;

            case ($e instanceof EmailAlreadyInSystemException):

                return response()->view('errors.email-already-in-system');
                break;

            case ($e instanceof EmailNotProvidedException):
                return response()->view('errors.email-not-provided');
                break;

            case ($e instanceof ModelNotFoundException):
                return response()->view('errors.404', [], 404);
                break;

            case ($e instanceof NoActiveAccountException):
                return response()->view('errors.no-active-account');
                break;

            case ($e instanceof NotFoundHttpException):

                return response()->view('errors.404', [], 404);
                break;

            case ($e instanceof TransactionFailedException):

                return response()->view('errors.transaction-failed', [], 404);
                break;

            case ($e instanceof UnauthorizedException):
                return response()->view('errors.unauthorized');
                break;

            default:
                return (new SymfonyDisplayer(config('app.debug')))
                    ->createResponse($e);

        }

    }



    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }
}
