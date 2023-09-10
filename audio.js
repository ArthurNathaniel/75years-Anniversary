// JavaScript for audio functionality
const audioPlayer = document.getElementById("audio-player");
const audioSource = document.getElementById("audio-source");
const audioList = document.querySelector(".audio-list");
const searchInput = document.getElementById("search-input");

let currentlyPlaying = null;

// Define an array of audio file URLs with titles and dates
const audioFiles = [
  {
    title: "Obaa Hemaa",
    src: "./audio/obaa.mp3",
    date: "2023-09-12",
  },
  {
    title: "Oh Linda",
    src: "./audio/Oh-linda.mp3",
    date: "2023-09-14",
  },
  {
    title: "Audio 3",
    src: "./audio/audio3.mp3",
    date: "2023-09-16",
  },

  {
    title: "Oh Linda",
    src: "./audio/Oh-linda.mp3",
    date: "2023-09-14",
  },
  {
    title: "Oh Linda",
    src: "./audio/Oh-linda.mp3",
    date: "2023-09-14",
  },
  {
    title: "Oh Linda",
    src: "./audio/Oh-linda.mp3",
    date: "2023-09-14",
  },
  // Add more audio files as needed
];

// Function to create an audio item and append it to the audio list
function createAudioItem(title, src, date) {
  const audioItem = document.createElement("div");
  audioItem.classList.add("audio-box");
  audioItem.innerHTML = `
                <div class="audio-icon">
                    <h1><i class="fa-solid fa-play"></i></h1>
                </div>
                <div class="audio-info">
                    <h3>${title}</h3>
                    <p id="audio-date">${date}</p>
                </div>
                <div class="audio-download">
                    <h1><i class="fa-regular fa-circle-down"></i></h1>
                </div>
            `;

  audioItem.addEventListener("click", () => {
    if (currentlyPlaying === src) {
      // If the same audio is already playing, pause it
      audioPlayer.pause();
      audioItem.querySelector(".audio-icon h1").innerHTML =
        '<i class="fa-solid fa-play"></i>';
      currentlyPlaying = null;
    } else {
      audioSource.src = src;
      audioPlayer.load();
      audioPlayer.play();
      audioItem.querySelector(".audio-icon h1").innerHTML =
        '<i class="fa-solid fa-pause"></i>';
      currentlyPlaying = src;
    }
  });

  // Download audio when clicking on the download icon
  const downloadLink = document.createElement("a");
  downloadLink.style.display = "none";
  downloadLink.href = src;
  downloadLink.download = title + ".mp3";
  document.body.appendChild(downloadLink);

  audioItem.querySelector(".audio-download").addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent audio play when clicking the download icon
    downloadLink.click();
  });

  audioList.appendChild(audioItem);
}

// Populate the audio list initially
audioFiles.forEach((audio) => {
  createAudioItem(audio.title, audio.src, audio.date);
});

// Function to filter audio items based on search input
function filterAudioItems(searchText) {
  const filteredAudioFiles = audioFiles.filter((audio) => {
    return audio.title.toLowerCase().includes(searchText.toLowerCase());
  });

  // Clear the current audio list
  audioList.innerHTML = "";

  // Populate the audio list with filtered items
  filteredAudioFiles.forEach((audio) => {
    createAudioItem(audio.title, audio.src, audio.date);
  });
}

// Add an event listener to the search input field
searchInput.addEventListener("input", () => {
  filterAudioItems(searchInput.value);
});
