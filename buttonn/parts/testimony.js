import React from 'react';

import TestimonyAccent from 'assets/images/testimonial-landingPages-frame.jpg';

import Star from 'elements/Star';
import Button from 'elements/Button';

export default  function Testimony({ data }) {
    return (
     <section className="container">
      <div classsName="row align-items-center">
        <div className="col-auto" style={{ marginRight: 70 }}>
          <div 
            className="testimonial-hero" 
            style={{margin: `30px 0 0 30px`}}
            >
              <img 
              src={data.imageUrl} 
              alt="Testimonial" 
              className="position-absolute" 
              style={{zIndex: 1 }}
              />
              <img 
              src={TestimonyaAccent} 
              alt="Testimonial Frare" 
              clasName="position-absolute" 
              style={{margin: `-30px 0 0 -30px`, zIndex: 1 }}
              />
            </div>
        </div>
        <div className="col">
          <h4 style={{marginBotton: 48}}>{data.name}</h4>
          <star value={2.25} width={35} height={35} spacing={4}/>
          <h5 className="h2 font-weight-light line-height-2 my-3">
            {data.content}
          </h5>
          <span className="text-gray-500">
            {data.familyName}, {data.familyOccupation}
          </span>

            <div>
              <Button classname="btn px-5" style={{marginTop: 40}} hasShadow isPrimary type="link" href={`/testimonial/${data._id}`}>

              </Button>
            </div>


        </div>
      </div>
    </section>
  );
}