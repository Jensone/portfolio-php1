<!-- Nom(r) / Prenom(r)
Mail(r) / Telephone
Objet (Autre, formation, collaboration, Devis,)
Message -->
<div class="m-4 shadow-sm">
    <form action="" method="post" class="flex flex-col gap-3">
        <!-- Objets -->
        <div class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none">
            <select name="object" id="object" class="bg-transparent text-slate-800 w-full">
                <option value="Collaboration">Collaboration</option>
                <option value="Formation">Formation</option>
                <option value="Devis gratuit">Devis gratuit</option>
                <option value="Autre">Autre...</option>
            </select>
        </div>
        <!-- Identité -->
        <div class="flex gap-4 my-4">
            <div class="flex flex-col gap-2">
                <label for="firstname" class="font-semibold text-lg">Votre prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Martin" value="Martine" minlength="2" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
            </div>
            <div class="flex flex-col gap-2">
                <label for="lastname" class="font-semibold text-lg">Votre nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="Dupont" value="Dupont" minlength="2" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
            </div>
        </div>
        <!-- Contact -->
        <div class="flex gap-4 my-4">
            <div class="flex flex-col gap-2">
                <label for="email" class="font-semibold text-lg">Adresse email</label>
                <input type="email" name="email" id="firstname" placeholder="martin@gmail.com" value="martin@gmail.com" maxlength="80" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
            </div>
            <div class="flex flex-col gap-2">
                <label for="telephone" class="font-semibold text-lg">Téléphone</label>
                <input type="tel" name="telephone" id="lastname" placeholder="0612345678" value="0612345678" minlength="10" maxlength="12" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" required>
            </div>
        </div>
        <!-- Message -->
        <textarea name="message" id="message" rows="10" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" placeholder="Votre message..." required minlength="100"></textarea>
        <button type="submit" class="bg-white text-slate-800 rounded-lg shadow-md p-2 mt-4 hover:text-white hover:bg-slate-800">
            Envoyer
        </button>
    </form>
</div>