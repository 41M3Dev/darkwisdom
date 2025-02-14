import { films, animes, poesie } from "./quotes.js";

// Sélection des éléments HTML./
const phraseanime = document.querySelector(".quoteanime");
const buttonanime = document.querySelector(".btn-anime");
const sourceAnime = document.querySelector(".sourceanime");
const titleAnime = document.querySelector(".titleanime");

const phrasefilm = document.querySelector(".quotefilm");
const buttonfilm = document.querySelector(".btn-film");
const sourceFilm = document.querySelector(".sourceFilm");
const titleFilm = document.querySelector(".titleFilm");

const phrasePoesie = document.querySelector(".quotepoesie");
const buttonPoesie = document.querySelector(".btn-poesie");
const sourcePoesie = document.querySelector(".sourcePoesie");
const titlePoesie = document.querySelector(".titlePoesie");

// Fonctions pour générer une citation aléatoire
function RandomQuoteanime() {
  const randomIndex = Math.floor(Math.random() * animes.length);
  const selectedQuote = animes[randomIndex];

  phraseanime.innerHTML = `"${selectedQuote.citation}"`;
  sourceAnime.innerHTML = `- ${selectedQuote.source}`;
  titleAnime.innerHTML = `<strong>${selectedQuote.auteur}</strong>`;
}

function RandomQuotefilm() {
  const randomIndex = Math.floor(Math.random() * films.length);
  const selectedQuote = films[randomIndex];

  phrasefilm.innerHTML = `"${selectedQuote.citation}"`;
  sourceFilm.innerHTML = `- ${selectedQuote.source}`;
  titleFilm.innerHTML = `<strong>${selectedQuote.auteur}</strong>`;
}

function RandomQuotePoesie() {
  const randomIndex = Math.floor(Math.random() * poesie.length);
  const selectedQuote = poesie[randomIndex];

  phrasePoesie.innerHTML = `"${selectedQuote.citation}"`;
  sourcePoesie.innerHTML = `- ${selectedQuote.source}`;
  titlePoesie.innerHTML = `<strong>${selectedQuote.auteur}</strong>`;
}

// Événement au clic
buttonanime.addEventListener("click", RandomQuoteanime);
buttonfilm.addEventListener("click", RandomQuotefilm);
buttonPoesie.addEventListener("click", RandomQuotePoesie);
