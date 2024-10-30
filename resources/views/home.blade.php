@extends('layouts.default')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h2 class="text-xl font-semibold text-gray-700 mb-5">Upload File</h2>
        <strong>[Note: from asia we should use EU Central (Amsterdam), once you set your regiion, you cannot change]</strong>
        <br>
        <br>
        <a href="{{ route('file.get') }}" class="text-blue-400 underline">View a test file</a>
        <form enctype="multipart/form-data" method="post" action="{{ route('upload.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="file" class="block text-sm font-medium text-gray-600 mb-1">Choose file</label>
                <input type="file"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    name="file" id="file" />
            </div>

            <button type="submit"
                class="w-full px-5 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Upload
            </button>
        </form>
    </div>
@endsection
