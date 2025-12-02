import React from "react";
import { Row, Column } from "@react-email/components";
type FooterProps = {
  footer1: string;
  footer2: string;
  footer3: string;
  footer4: string;
  footer5: string;
  footer6: string;
  rights: string;
};
export default function Footer({
  footer1,
  footer2,
  footer3,
  footer4,
  footer5,
  footer6,
  rights,
}: FooterProps) {
  return(
    <>
      <div className="text-[#ababab] text-sm font-light py-5">
        <p>
         {footer1}
        </p>
        <p>
        {footer2}
        </p>
        <p>
        {footer3}
        </p>
        <p>
       {footer4}
        </p>
        <p>
         {footer5}
        </p>
        <p>
        {footer6}
        </p>
        <p>{rights}</p>
        <div className=" w-[150px] mx-auto">
          <Row>
            
            <Column align="center">
            <a href="https://www.facebook.com/people/4T/100070874495725/#" target="_blank">
              <img
                src="https://i.ibb.co/wNcFY7gH/icons8-filled-circle-100-3.png"
                width="32"
                style={{ display: "block" }}
              />
              </a>
            </Column>
            <Column align="center">
            <a href="https://www.instagram.com/4t_trading/" target="_blank">
              <img
                src="https://i.ibb.co/fY4MH6ym/icons8-filled-circle-100-2.png"
                width="32"
                style={{ display: "block" }}
              />
              </a>
            </Column>
          <Column align="center">
            <a href="https://x.com/4t_trading" target="_blank">
              <img
                src="https://i.ibb.co/WWvkKp6Z/icons8-filled-circle-100-1.png"
                width="32"
                style={{ display: "block" }}
              />
              </a>
            </Column>
          </Row>
        </div>
      </div>
    </>
  );
}
