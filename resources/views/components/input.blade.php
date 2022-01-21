<div class="col-span-6 sm:col-span-4 my-4">
    <x-jet-input id='{{$field}}' placeholder='{{$lable}}' type="{{$type}}"  class="mt-1 block w-full shadow-md" name='{{$field}}' value='{{old($field)}}'/>
    <x-jet-input-error for='{{$field}}' class="mt-2" />
</div>