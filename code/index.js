const authModal = document.getElementById('auth-modal');
  const openLoginBtn = document.getElementById('open-login-modal');
  const closeAuthBtn = document.getElementById('close-auth-modal');
  const loginForm = document.getElementById('login-form');
  const registerForm = document.getElementById('register-form');
  const showRegisterBtn = document.getElementById('show-register');
  const showLoginBtn = document.getElementById('show-login');

  openLoginBtn.addEventListener('click', e => {
    loginForm.classList.remove('hidden');
    registerForm.classList.add('hidden');
    authModal.classList.remove('hidden');
  });

  closeAuthBtn.addEventListener('click', () => {
    authModal.classList.add('hidden');
  });

  showRegisterBtn.addEventListener('click', () => {
    loginForm.classList.add('hidden');
    registerForm.classList.remove('hidden');
  });

  showLoginBtn.addEventListener('click', () => {
    registerForm.classList.add('hidden');
    loginForm.classList.remove('hidden');
  });
const listvehicles = document.getElementById('listvehicles');

fetch('./controlls/getVehicleData.php')
  .then(response => response.json())
  .then(data => {
    console.log(data);

    data.forEach((e) => {
        
    let newdiv = document.createElement('div');
    newdiv.innerHTML = `
        <div class="bg-white rounded shadow overflow-hidden">
        <img src="${e.Vehicle_image}" class="h-48 w-full object-cover" />
        <div class="p-5">
          <h4 class="font-semibold text-xl">${e.model}</h4>
          <p class="text-sm text-gray-500">Economy • Manual</p>
          <p class="mt-3 text-yellow-500 font-bold">200DH / day</p>
          <a href="#" class="mt-4 inline-block bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">View Details</a>
        </div>
        </div>
    `;


    listvehicles.appendChild(newdiv);
    });
  })

