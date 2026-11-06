/*** Code JS pour le catalogue(les pages de produits)
 * // Ge
*/

// methode 1: SYNCHRONE

document.querySelectorAll("form.controle select").forEach(
  eltSelect => eltSelect.addEventListener("change", evt => evt.target.form.submit()
  )

);




// methode 2: ASYCHRONE

// document.querySelectorAll("form.controle select").forEach(
//   eltSelect => eltSelect.addEventListener("change",
//     evt => {
//       evt.preventDefault();
//       // gererProduitsAsyncrone();
//       gererProduitsAsychrone(evt.target.form);
//     }
//   )
// )

// function gererProduitsAsychrone(frm)
// {
//   let paramUrl = new URLSearchParams(new FormData(frm)).toString();
//   console.log(paramUrl);
//   let reponseFiltreTri = fetch("async/teeshirts.async.php?" + paramUrl);
// }
