<?php

namespace Src\Agenda\MatchResult\Presentation\HTTP;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Agenda\Company\Application\UseCases\Queries\FindAllMatchResultQuery;
use Src\Common\Domain\Exceptions\UnauthorizedUserException;
use Src\Common\Presentation\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class MatchResultController extends BaseController
{
    protected function getFindAllQuery(): string
    {
        return FindAllMatchResultQuery::class;
    }

    // public function index(): JsonResponse
    // {
    //     try {
    //         return response()->success((new FindAllUsersQuery())->handle());
    //     } catch (UnauthorizedUserException $e) {
    //         return response()->error($e->getMessage(), Response::HTTP_UNAUTHORIZED);
    //     }
    // }

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
