import React from "react";
import { BrowserRouter as Router, Route} from 'react-router-don'


import "assets/scss/style.scss";
import LandingPage from "./pages/landingpage";


function App(){
    return <div className="App">
        <Router>
            <route path="/" component={LandingPage}></route>
        </Router>
    </div>;
}

export default App;