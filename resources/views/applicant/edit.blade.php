<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Applicant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-error-component class="mb-4" :errors="$errors" />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('applicant.update',[$applicant])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input First Name" name="first_name" value="{{$applicant->first_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Middle Name" name="middle_name" value="{{$applicant->middle_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Last Name" name="last_name" value="{{$applicant->last_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Address" name="address" value="{{$applicant->address}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Cellphone No.</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Cellphone No." name="cellphone_no" value="{{$applicant->cellphone_no}}">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Input Address" name="birthdate" value="{{$applicant->birthdate}}">
                        </div>

                        <select class="form-select mb-3" aria-label="Default select example" name="gender">
                            <option selected>Choose Gender</option>
                            <option value="Male" @selected($applicant->gender == "Male")>Male</option>
                            <option value="Female"  @selected($applicant->gender == "Female")>Female</option>
                        </select>
                        <hr class="mb-3">
                      <button type="submit"  class="btn btn-outline-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
