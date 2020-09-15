# Secure video player PHP

Secure video stream from server:
- RS256 JWT encryption (JWT tokens required -> https://github.com/firebase/php-jwt)
- videos stored in video/ directory

# Token structure
- vid -> filename of the video
- app_id -> unique string