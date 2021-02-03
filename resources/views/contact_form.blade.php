@include('includes.head')

@include('includes.header')


<div class="container mainContents text-center">    <!-- mainContents -->

    <form method="POST" action="#">
    @csrf
        <input type="hidden" name="user_id" value="">

        <select name="title_select">
            <option vlaue="1">サンプル１</option>
            <option vlaue="2">サンプル２</option>
            <option vlaue="3">サンプル３</option>
        </select>

        <div class="mt-5">
            <p class=""><b>内　容</b></p>
            <textarea name="contact_content" placeholder="{{old('contact_content')}}" cols="40" rows="10" class="p-2">{{old('contact_content')}}</textarea>
        </div>

        <input type="submit" value="送信" class="my-3 px-5 btn btn-info btn-lg">

    </form>


</div>                                  <!-- /mainContents -->


@include('includes.footer')