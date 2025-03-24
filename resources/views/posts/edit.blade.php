<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #1a202c;
      color: #e2e8f0;
    }

    .form-container {
      animation: fadeIn 0.5s ease forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

  <div class="max-w-md mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container mt-10">
    <h2 class="text-2xl font-semibold text-white mb-6">Yangilik yarating</h2>
    <form action="{{route('posts.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Title </label>
            <input type="text" id="name" name="title"placeholder="John Doe" value="{{$post->title}}" required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="message" class="block text-gray-300 text-sm font-bold mb-2">To'liq tasnif </label>
            <textarea id="message" name="body" rows="4" placeholder="{{$post->body}}"  required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white"></textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="file" class="block text-gray-300 text-sm font-bold mb-2">Rasmi </label>
            <input type="file" id="name" name="photo"placeholder="photo" value="{{$post->photo}}" required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
            @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
            Updated
        </button>
    </form>
</div>

</html>