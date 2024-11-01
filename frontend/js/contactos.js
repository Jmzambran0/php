const URL_ENDPOINT = "http://127.0.0.1:8000/api/app";
const table = document.getElementById("contactos");
let contactos = [];
//fetch(`${URL_ENDPOINT}/contactos`)
const leerContactos = () => {
  fetch(URL_ENDPOINT + "/contactos")
    .then((response) => {
      console.log(response);
      return response.json();
    })
    .then((body) => {
      console.log(body);
      contactos = body.data;
      console.log(contactos);
      const tbody = table.getElementsByTagName("tbody")[0];
      tbody.innerHTML = "";

      contactos.forEach((contacto) => {
        const tr = document.createElement("tr");

        const nombreTd = document.createElement("td");
        nombreTd.textContent = contacto.nombre;
        const emailTd = document.createElement("td");
        emailTd.textContent = contacto.email;
        const telTd = document.createElement("td");
        telTd.textContent = contacto.telefono;

        tr.appendChild(nombreTd);
        tr.appendChild(emailTd);
        tr.appendChild(telTd);
        tbody.appendChild(tr);
      });
    });
};
leerContactos();
