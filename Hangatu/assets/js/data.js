const languageHandler = (e) => {
  lang = e.target.value;
  const selectedLang = localStorage.getItem("lang");

  let currentURL = location.href;
  if (lang === "oromia") {
    localStorage.setItem("lang", lang);
    currentURL = currentURL.split("/")[1];
    currentURL = currentURL.replace("#", "");
    location.href = `${currentURL}index.html`;
  } else {
    currentURL = currentURL.split("/")[1];
    currentURL = currentURL.replace("#", "");
    location.href = `${currentURL}indexa.html`;
  }
};
