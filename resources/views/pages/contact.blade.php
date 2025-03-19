@extends('layouts.app')

@section('title', 'Contactez-nous - Mon Site Web')

@section('content')
<div class="container">
    <h1>Contactez-nous</h1>
    <p>Besoin d'aide ? Remplissez le formulaire ci-dessous ou appelez-nous.</p>

    <h2>Informations de Contact</h2>
    <p>Adresse : 123 Rue de l'Innovation, Paris</p>
    <p>Téléphone : +33 1 23 45 67 89</p>
    <p>Email : contact@monsite.com</p>

    <h2>Formulaire de Contact</h2>
    <form>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</div>
@endsection
