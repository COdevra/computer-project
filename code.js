
let quotes=
[
   ' "The future belongs to those who believe in the beauty of their dreams." - Eleanor Roosevelt',
' "Believe you can and you are halfway there." - Theodore Roosevelt',
'"Success is not final, failure is not fatal: it is the courage to continue that counts." - Winston Churchill',
'"If you can dream it, you can achieve it." - Zig Ziglar',
'"The greatest glory in living lies not in never falling, but in rising every time we fall." - Nelson Mandela',
'"The only way to do great work is to love what you do." - Steve Jobs',
'"Do not watch the clock do what it does. Keep going." - Sam Levenson',
'"The only limit to our realization of tomorrow will be our doubts of today." - Franklin D. Roosevelt',
'"You miss 100% of the shots you do not take." - Wayne Gretzky',
'"The best way to predict your future is to create it." - Abraham Lincoln',
" 'I have not failed. I've just found 10,000 ways that won't work.' - Thomas Edison",
'"Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful." - Albert Schweitzer',
'"Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle." - Christian D. Larson',
" 'Your time is limited, don't waste it living someone else's life.' - Steve Jobs",
'"The only person you are destined to become is the person you decide to be." - Ralph Waldo Emerson',
'"We may encounter many defeats but we must not be defeated." - Maya Angelou',
" 'Success is not a destination, but the road that you are on. Being successful means that you're working hard and walking your walk every day. You can only live your dream by working hard towards it.' - Marlon Wayans",
'"Success is the sum of small efforts, repeated day in and day out." - Robert Collier',
'"It does not matter how slowly you go as long as you do not stop." - Confucius',
'"The greatest glory in living lies not in never falling, but in rising every time we fall." - Ralph Waldo Emerson',

];
function generateQuote() {
    var randomIndex = Math.floor(Math.random() * quotes.length);
    var quoteElement = document.getElementById("output");
    quoteElement.innerHTML = quotes[randomIndex];
  }