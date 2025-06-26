<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<form method="POST" action="/register" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    <h2 class="text-xl font-semibold mb-4">Cadastro</h2>

    <label class="block mb-2">Nome</label>
    <input type="text" name="name" class="w-full border border-gray-300 p-2 rounded mb-4" required>

    <label class="block mb-2">Email</label>
    <input type="email" name="email" class="w-full border border-gray-300 p-2 rounded mb-4" required>

    <label class="block mb-2">Senha</label>
    <input type="password" name="password" class="w-full border border-gray-300 p-2 rounded mb-4" required>

    <label class="block mb-2">Confirme a senha</label>
    <input type="password" name="password_confirmation" class="w-full border border-gray-300 p-2 rounded mb-4" required>

    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
        Registrar
    </button>
</form>
</body>
</html>
