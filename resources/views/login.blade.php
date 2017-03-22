<div id="Login" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                 {{ trans('message.someproblems') }}<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ url('/login') }}" name="login_form" style="margin:20px;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p>{{trans('message.li110')}}<input type="email"  id="email" name="email" placeholder="Email"></p>
                <p>{{trans('message.li111')}} <input type="password"  name="password" placeholder="Password"></p>
                <p><button type="submit" id="signin">{{trans('message.li112')}}</button>
                <a href="">{{trans('message.li113')}}</a>
            </p>
        </form>

    </div>
  </div>
</div>