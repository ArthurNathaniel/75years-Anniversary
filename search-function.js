
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
