<?php

namespace Src\Common\Presentation;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Common\Domain\Exceptions\UnauthorizedUserException;
use Src\Common\Application\UseCases\Queries\FindAllQuery;
use Symfony\Component\HttpFoundation\Response;

abstract class Controller
{
    protected FindAllQuery $findAllQuery;

    public function __construct()
    {
        $this->findAllQuery = $this->getFindAllQuery();
    }

    abstract protected function getFindAllQuery(): string;

    public function index(): JsonResponse
    {
        dd(123);
        try {
            return response()->success((new $this->findAllQuery())->handle());
        } catch (UnauthorizedUserException $e) {
            return response()->error($e->getMessage(), Response::HTTP_UNAUTHORIZED);
        }
    }

    // public function show(int $id): JsonResponse
    // {
    //     try {
    //         return response()->success((new FindUserByIdQuery($id))->handle());
    //     } catch (UnauthorizedUserException $e) {
    //         return response()->error($e->getMessage(), Response::HTTP_UNAUTHORIZED);
    //     }
    // }

    // public function store(Request $request): JsonResponse
    // {
    //     try {
    //         $userData = UserMapper::fromRequest($request);
    //         $userData->validateNonAdminWithCompany();
    //         $password = new Password($request->input('password'), $request->input('password_confirmation'));
    //         $user = (new StoreUserCommand($userData, $password))->execute();
    //         return response()->success($user->toArray(), Response::HTTP_CREATED);
    //     } catch (\DomainException $domainException) {
    //         return response()->error($domainException->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
    //     } catch (UnauthorizedUserException $e) {
    //         return response()->error($e->getMessage(), Response::HTTP_UNAUTHORIZED);
    //     }
    // }

    // public function update(int $user_id, Request $request): JsonResponse
    // {
    //     try {
    //         $user = UserMapper::fromRequest($request, $user_id);
    //         $password = new Password($request->input('password'), $request->input('password_confirmation'));
    //         (new UpdateUserCommand($user, $password))->execute();
    //         return response()->success($user->toArray());
    //     } catch (\DomainException $domainException) {
    //         return response()->error($domainException->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
    //     } catch (UnauthorizedUserException $e) {
    //         return response()->error($e->getMessage(), Response::HTTP_UNAUTHORIZED);
    //     }
    // }

    // public function destroy(int $user_id): JsonResponse
    // {
    //     try {
    //         (new DestroyUserCommand($user_id))->execute();
    //         return response()->success(null, Response::HTTP_NO_CONTENT);
    //     } catch (UnauthorizedUserException $e) {
    //         return response()->error($e->getMessage(), Response::HTTP_UNAUTHORIZED);
    //     }
    // }
}
