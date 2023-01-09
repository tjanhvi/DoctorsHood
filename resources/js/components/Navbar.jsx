import React from "react";
import { Link } from "react-router-dom"
import { useState } from "react";
import { GiHamburgerMenu } from "react-icons/gi";
import {ImCross} from "react-icons/im";
const Navbar = () => {
    const [showMediaIcons, setShowMediaIcons] = useState(false);
    return (
        <header className="text-gray-600 body-font nav">
            <div className={showMediaIcons ?"hero" : "container mx-auto flex flex-wrap p-0 lg:p-2 sm:flex-col md:flex-row items-center hero1"}>
                <div className="mobile-nav">
                <div className="hamburger-menu">
                    <button onClick={() => setShowMediaIcons(!showMediaIcons)}>
                    {showMediaIcons ? <ImCross /> : <GiHamburgerMenu />}
                    </button>
                </div>
                <a className="sm:flex title-font font-medium sm:items-center text-gray-900 mb-4 md:mb-0" href="/">
                    <span className="sm:ml-3 text-xl logo-text">DoctorsHood</span>
                </a>
                </div>
                <nav className={showMediaIcons ? "menu-link mobile-menu-link" : "md:ml-auto sm:flex sm:flex-wrap sm:items-center text-base sm:justify-center nav-link"}>
                    <Link onClick={() => setShowMediaIcons(false)} to="/" className="sm:mr-5 hover:text-gray-900 link">Home</Link>
                    <Link onClick={() => setShowMediaIcons(false)} to="/virtual-doctor" className="sm:mr-5 hover:text-gray-900 link">
                        Virtual Doctor
                    </Link>
                    <Link onClick={() => setShowMediaIcons(false)} to="/consult-now" className="sm:mr-5 hover:text-gray-900 link">
                        Consult Now
                    </Link>
                    <Link onClick={() => setShowMediaIcons(false)} to="/medicine-reminder" className="sm:mr-5 hover:text-gray-900 link">
                        Medicine Reminder
                    </Link>
                    <Link onClick={() => setShowMediaIcons(false)} to="/login" className="sm:mr-5 hover:text-gray-900 link">
                        Login
                    </Link>
                    <Link onClick={() => setShowMediaIcons(false)} to="/signup" className="sm:mr-5 hover:text-gray-900 link">
                        Signup
                    </Link>
                </nav>
                <button className="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mr-4 md:mt-0 btn">
                    Download Our App
                </button>
                
            </div>
        </header>
    );
};

export default Navbar;

