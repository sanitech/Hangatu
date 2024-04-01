const toggle = document.querySelector(".togglecontainer");
const lanSelector = document.querySelector(".lanSelector");
const langText = ["አማርኛ", "Oromiffa", "English"];

const toggleHandler = () => {
  console.log("too");
  toggle.classList.toggle("toggle-open");
};

const routHandler = () => {
  const lang = localStorage.getItem("lang");
  if (lang === "orm") {
    let currentURL = location.href;
    console.log(currentURL);
    currentURL = currentURL.replace("index.html", "");
    currentURL = currentURL.replace("#", "");

    location.href = `${currentURL}orm/`;
  }
};

const fetLang = () => {
  let temp = null;
  const selectedLang = localStorage.getItem("lang");
  langText.forEach((lang) => {
    temp += `<option value="${lang}" ${
      selectedLang === lang && "selected"
    }>${lang}</option>`;
  });

  lanSelector.innerHTML = temp;
};

fetLang();

const languageHandler = (e) => {
  lang = e.target.value;
  const selectedLang = localStorage.getItem("lang");

  localStorage.setItem("lang", lang);
  let currentURL = location.href;
  if (lang === "Oromiffa") {
    currentURL = currentURL.split("/")[1];
    currentURL = currentURL.replace("#", "");
    location.href = `${currentURL}index.html`;
  } else if (lang === "አማርኛ") {
    currentURL = currentURL.split("/")[1];
    currentURL = currentURL.replace("#", "");
    location.href = `${currentURL}indexa.html`;
  } else {
    currentURL = currentURL.split("/")[1];
    currentURL = currentURL.replace("#", "");
    location.href = `${currentURL}indexen.html`;
  }
};

routHandler();
