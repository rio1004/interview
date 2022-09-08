<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="alert alert-custom alert-success">
                    <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                    <div class="alert-text">{{ session('success') }}</div>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Cellphone No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($applicants as $applicant )
                                <tr>
                                    <td>{{$applicant->first_name}}</td>
                                    <td>{{$applicant->middle_name}}</td>
                                    <td>{{$applicant->last_name}}</td>
                                    <td>{{$applicant->gender}}</td>
                                    <td>{{$applicant->birthdate}}</td>
                                    <td>{{$applicant->cellphone_no}}</td>
                                    <td>{{$applicant->address}}</td>
                                    <td>
                                        <a href="{{route('applicant.edit',[$applicant])}}" class="btn btn-outline-success">Edit</a>
                                        @livewire('applicant.delete-applicant', ['applicant' => $applicant], key($applicant->id))
                                    </td>
                                </tr>
                            @empty
                                <td colspan="8">There is no available data</td>
                            @endforelse

                        </tbody>

                      </table>
                      <a type="button" href="{{route('applicant.create')}}" class="btn btn-outline-primary">Create new Applicant</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
