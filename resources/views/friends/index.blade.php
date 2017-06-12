{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master')

@section('content')
    @include('home._user_header_default', [
        'title' => trans('home.user.header.welcome', ['username' => Auth::user()->username])
    ])

    <div class="osu-page osu-page--small-desktop osu-page--rankings">
        <div class="user-friends">
            <h2 class="user-home__news-title">Friends</h2>
            <div class="user-friends__list">
                @foreach ($friends as $connection)
                    @include('objects._usercard', [
                        'user' => $connection->target,
                        'mutual' => $connection->mutual
                    ])
                @endforeach
            </div>
        </div>
    </div>
@endsection
