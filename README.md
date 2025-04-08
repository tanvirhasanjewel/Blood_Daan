# Blood_Daan

Blood Donation System is a PHP-based web project to find blood in your location.

## Introduction

1. Install XAMPP or WAMPP.
2. Open XAMPP Control panel and start [Apache] and [MySQL].
3. Download the project from GitHub(https://github.com/tanvirhasanjewel/Blood_Daan.git)
4. Extract files in C:\xampp\htdocs.
5. Open link localhost/phpmyadmin
6. Click on new at side navbar.
7. Give a database name as (blood_dann) and hit on create button.
8. After creating the database name, click on import.
9. Browse the file in the directory.
10. After importing successfully.
    
## Methodology

### 1. **Data File Description**

The MovieLens dataset contains the following:
- **Movie Information**: Details of each movie.
- **User Information**: Details of each user.
- **User Ratings**: Ratings given by users to various movies on a scale from 1 to 5.

### 2. **Film Similarity Calculation**

The system calculates the **Cosine Similarity** between films based on the ratings provided by users. If two films have similar ratings across users, they are considered similar.

### 3. **Personalized Recommendations**

The system works as follows:
1. Identifies the user and their highest-rated films.
2. Finds films that are similar to those highly-rated films using the similarity matrix.
3. Recommends films the user hasn't rated yet but are similar to their preferences, based on the average ratings of similar films.

## How It Works

### 1. **Movie Similarity Matrix Computation**

The system computes the similarity between each pair of films based on the ratings provided by all users. The higher the similarity score, the more alike two films are in terms of user ratings.

### 2. **Generating Recommendations**

1. A specific user is selected from the dataset.
2. The system identifies the movies the user has rated the highest.
3. For each of these highly-rated films, the system searches for similar films using the similarity matrix.
4. The system filters out films the user has already rated and recommends the remaining films with the highest average ratings.

### 3. **Personalization**

By focusing on the user’s highest-rated films, the system generates personalized recommendations that align with their preferences. This ensures the suggested movies are relevant to the user’s tastes and prior ratings.

## Results

- The film similarity matrix successfully identified pairs of movies with high similarity scores. For example, if a user highly rated *The Matrix*, the system can recommend *Inception* or *Terminator*, as they are highly similar in terms of user ratings.
  
- The personalized recommendation system was effective in:
  1. Identifying the user's preferences based on their top-rated films.
  2. Finding similar, unrated films to suggest.

- The recommended films were highly relevant and suited to the user's tastes.

### Example

For **User 1**, films with the highest ratings were:
- *The Godfather*
- *Pulp Fiction*
- *Schindler’s List*

Based on these films, the system recommended:
- *GoodFellas*
- *The Shawshank Redemption*

These recommendations were highly rated by other users with similar preferences.

## Conclusion

This project successfully developed a **Movie Recommendation System** using the **MovieLens dataset**. By computing a movie similarity matrix and leveraging user ratings, the system identified and recommended movies similar to those a user had rated highly. The system personalized suggestions based on individual preferences, filtering out films the user had already rated.

This recommendation system provides a useful tool to help users discover movies they are likely to enjoy, based on the behavior and ratings of similar users. The methodology of calculating movie similarity and generating recommendations based on a user’s highest-rated films proved to be effective.

## Requirements

- Python 3.x
- Pandas
- Numpy

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/sai1047/movie-recommendation-system.git
