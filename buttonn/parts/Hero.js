import React from "react";
import Fade from 'react-reveal/Fade';

import ImageHero from "assets/images/img-hero.jpg";
import ImageHero_ from "assets/images/img-hero-frame.jpg";
import IconCities from "assets/images/icons/icon-cities.svg";
import IconTraveler from "assets/images/icons/icon-traveler.svg";
import IconTreasure from "assets/images/icons/icon-treasure.svg";

import Button from 'element/Button'

import FormatNumber from "utils/FormatNumber";

export default function Hero(props) {
    function showMostPicked() {
        window.scrollTo({
            top: props.refMostpicked.current.offsetTop -30,
            behavior: "smooth"
        });
    }
    
      return(
        <Fade>
        <section className="container pt-4">
            <div classsName="row align-items-center">
                <div className="col-auto pr-5" style={{ widht: 510 }}>
                    <h1 className="h2 font-weight-bold line-height-1 mb-3">
                        Forget Busy Work, <br />
                        Start Next Vacation
                    </h1>
                    <p 
                      className="mb-5 font-weight-light text-gray-500 w-75" 
                      style={{lineHeight:"170%"}}
                    >
                      We Provide what you need to enjoy your holiday with family. Time to 
                      make another memorable moments.
                    </p>
                    <Button 
                     className="btn px-5"
                     hasShadow
                     isPrimary 
                     onClick={showMostPicked}
                    >
                     Show Me Npw
                    </Button>

                    <div className="row mt-5">
                        <div className="col-auto" style={{marginRight: 35}}>
                            <img 
                              widht="36"
                              height="36"
                              src={IconTraveler} 
                              alt={`${props.data.traveler} Travelers`} 
                            />
                            <h6 className="mt-3">
                                {props.data.travelers} 
                                <span className="text-gray-500 font-weight-light">
                                    travelers
                                </span>
                            </h6>
                        </div>
                        <div className="col-auto" style={{marginRight: 35}}>
                            <img 
                              widht="36"
                              height="36"
                              src={IconTreasure} 
                              alt={`${props.data.treasures} Treasures`} 
                            />
                            <h6 className="mt-3">
                                {props.data.treasures} {" "}
                                <span className="text-gray-500 font-weight-light">
                                   treasures
                                </span>
                            </h6>
                        <div className="col-auto" style={{marginRight: 35}}>
                            <img 
                              widht="36"
                              height="36"
                              src={IconCities} 
                              alt={`${props.data.cities} Cities`} 
                            />
                            <h6 className="mt-3">
                                {props.data.cities}  {" "}
                                <span className="text-gray-500 font-weight-light">
                                   cities
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>

                <div className="col-6 pl-5">
                    <div style={{ widht:528, height: 410 }}>
                    <img 
                     src={ImageHero} 
                     alt="Room with couches" 
                     className="img-fluid position-absolute" 
                     style={{ margin: "-30px 0 0 -30px, zIndex: 1"}}
                    />
                    <img 
                     src={ImageHero}
                     alt="Room with couches"
                     classname="img-fluid position-absolute"
                     style={{ margin: "0 -15px -15px 0"  }}
                      />
                    </div>
                </div>
            </div>
        </div>    
    </section>
    </Fade>
      );
}
