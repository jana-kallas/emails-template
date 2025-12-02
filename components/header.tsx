

import React from "react";

type HeaderProps = {
  header: string;
  altText: string;
};

export default function Header({ header, altText }: HeaderProps) {
    
    return(
        <>
        <div className="w-full">
            <img src={header} alt={altText} className="w-full" />
        </div>
        </>
    )

}