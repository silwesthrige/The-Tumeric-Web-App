// dbcon.js - Firebase Database Configuration
// Import Firebase modules
import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-analytics.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";
import { getStorage } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-storage.js";

// Firebase configuration object
const firebaseConfig = {
    apiKey: "AIzaSyCqvtp0IWvJFQgbVuj4NsSgQQDVtvwD1tY",
    authDomain: "the-tumaric-indian-cusine.firebaseapp.com",
    projectId: "the-tumaric-indian-cusine",
    storageBucket: "the-tumaric-indian-cusine.firebasestorage.app",
    messagingSenderId: "808473473804",
    appId: "1:808473473804:web:2c7cf4c307f3a3d1a78f29",
    measurementId: "G-S35W1JTW9L"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Firebase services
const analytics = getAnalytics(app);
const db = getFirestore(app);
const storage = getStorage(app);

// Export the initialized services for use in other files
export { app, db, storage, analytics };