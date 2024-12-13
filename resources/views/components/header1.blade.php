<style>
    /* Header Styling */
    header {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
        background: linear-gradient(to right, #6a1b9a, #1e88e5);
        color: white;
        text-align: center;
        padding: 50px 20px; /* Memperbesar padding atas dan bawah */
        height: 80vh;
       
    }
    header h1 {
        font-size: 4rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 3px;
        animation: fadeIn 2s ease-in-out;
        margin: 0; 
    }

    header p {
        font-size: 1.3rem;
        margin-top: 15px;
        font-style: italic;
        animation: fadeIn 3s ease-in-out;
    }

    /* Gradient Animation */
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(270deg, #6a1b9a, #1e88e5, #42a5f5);
        background-size: 600% 600%;
        z-index: 1;
        animation: gradientMove 6s ease infinite;
    }

    header h1,
    header p {
        position: relative;
        z-index: 2;
    }

    /* Overlay for subtle effect */
    header::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 2;
    }

    /* Animation for text */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<header>
    <h1>About Me</h1>
</header>
