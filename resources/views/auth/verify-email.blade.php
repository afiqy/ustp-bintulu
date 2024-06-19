
<style>
.card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Style for the card */
.card {
    max-width: 400px;
    padding: 2rem;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
}

/* Logo styling */
/* Logo styling */
.logo {
    display: block;
    margin: 0 auto 2rem; /* Center the logo horizontally and add margin at the bottom */
    width: 100px;
    height: auto;
}


/* Title styling */
.title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

/* Text styling */
.text {
    font-size: 1rem;
    color: #6b7280;
    margin-bottom: 1.5rem;
}

/* Button styling */
.button {
    background-color: #4f46e5;
    color: #ffffff;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.25rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #4338ca;
}

/* Link styling */
.link {
    color: #4f46e5;
    text-decoration: none;
}

.link:hover {
    text-decoration: underline;
}

/* Logout button styling */
.logout-button {
    color: #6b7280;
    text-decoration: underline;
    cursor: pointer;
}

.logout-button:hover {
    color: #4f46e5;
}
</style>



<div class="card-container">
    <div class="card">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
        <h1 class="title">Sahkan Alamat Email Anda</h1>
        <p class="text">
            Terima kasih kerana mendaftar! Sebelum memulakan, bolehkah anda mengesahkan alamat emel anda dengan mengklik pautan yang telah kami hantar kepada anda?
        </p>
        <p class="text">
            Jika anda tidak menerima emel itu, sila periksa folder spam atau
            <a href="{{ route('verification.send') }}" class="link">klik di sini untuk menghantar semula</a>.
        </p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">Log Keluar</button>
        </form>
    </div>
</div>

