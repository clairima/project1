@extends('default')
@section('content')

<div class="flex justify-center pt-20">
  <div class="mb-3 xl:w-96">
    <select name="product_id" class="form-select form-select-lg mb-3
      appearance-none
      block
      w-full
      px-4
      py-2
      text-xl
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
        <option selected>Men</option>
        @foreach ($jackets as $key => $value)
        <option value="{{ $key }} {{ ($key == $selectedID) ? 'selected' : '' }}"
      {{ $value }}>Jackets</option>
        @endforeach
        <option value="m2">Pants</option>
        <option value="m3">Sweaters & Shirts</option>
        <option value="m4">Shoes</option>
        <option value="m5">Bags</option>
        <option value="m6">Accessories</option>
    </select>
  </div>
</div>
<div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <select class="form-select form-select-lg mb-3
      appearance-none
      block
      w-full
      px-4
      py-2
      text-xl
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
        <option selected>Women</option>
        <option value="w1">Jackets</option>
        <option value="w2">Pants</option>
        <option value="w3">Sweaters & Shirts</option>
        <option value="w4">Shoes</option>
        <option value="w5">Bags</option>
        <option value="w6">Accessories</option>
    </select>
  </div>
</div>
<div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <select class="form-select form-select-lg mb-3
      appearance-none
      block
      w-full
      px-4
      py-2
      text-xl
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
        <option selected>Kids</option>
        <option value="k1">Jackets</option>
        <option value="k2">Pants</option>
        <option value="k3">Sweaters & Shirts</option>
        <option value="k4">Shoes</option>
        <option value="k5">Bags</option>
        <option value="k6">Accessories</option>
    </select>
  </div>
</div>




@endsection