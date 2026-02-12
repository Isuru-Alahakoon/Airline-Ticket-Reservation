document.addEventListener("DOMContentLoaded", function () {
    // Handle star rating system
    const stars = document.querySelectorAll(".star-rating i");
    let currentRating = 0;
  
    stars.forEach((star, index) => {
      star.addEventListener("click", () => {
        currentRating = index + 1;
        updateStars(currentRating);
      });
    });
  
    function updateStars(rating) {
      stars.forEach((star, index) => {
        if (index < rating) {
          star.classList.add("selected");
        } else {
          star.classList.remove("selected");
        }
      });
    }
  
    // Handle form submission
    const submitButton = document.querySelector(".submit-btn");
    const reviewText = document.querySelector(".addrev");
  
    submitButton.addEventListener("click", () => {
      if (reviewText.value.trim() === "") {
        alert("Please enter a review before submitting.");
      } else {
        alert("Review submitted successfully!");
        reviewText.value = ""; // Clear the review box after submission
        updateStars(0); // Reset the star rating
      }
    });
});
